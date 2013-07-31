#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import collections
import ConfigParser
import json
import os.path
import requests
import simplejson.decoder

CONFIG_FILE = os.path.join(os.path.dirname(__file__), 'rss.conf')

class AuthenticationError(ValueError):
    """ Raised if the user email or password are incorrect """
    pass


class MetaMedia(object):
    """ Python interface to the MetaMedia API """

    config = ConfigParser.ConfigParser()
    config.read(CONFIG_FILE)

    def _validate_user_login(self):
        """ Return True if the user credentials are valid, False otherwise.

        This is a temporary solution to validate the user email and password:
        it calls MetaMedia.get_axes() and catches the JSONDecodeError exception
        that is raised when nothing is returned (because of an incorrect email
        or password). It could be the case, of course, that there were no axes
        in the database, but until a method that explicitly validates the
        credentials is implemented this approach works sufficiently well.

        """

        try:
            self.get_axes().next()
            return True
        # JSONDecodeError: "No JSON object could be decoded"
        except simplejson.decoder.JSONDecodeError:
            return False

    def __init__(self, email, password):
        self.auth_data = {'email' : email, 'password' : password}
        if not self._validate_user_login():
            msg = "email or password are incorrect"
            raise AuthenticationError(msg)

    def get_axes(self):
        """ A generator that yields the axes as named tuples """

        data = 'json=' + json.dumps(self.auth_data)
        headers = {'Content-Type': 'application/json'}
        url = self.config.get('urls', 'AXES_URL')
        kwargs = dict(headers=headers, data=data)
        r = requests.get(url, **kwargs)
        axes = r.json()

        Axis = collections.namedtuple('Axis', axes[0].keys())
        for axis in axes:
            yield Axis(*axis.values())

    def get_licenses(self):
        """ A generator that yields the licenses as named tuples """

        data = 'json=' + json.dumps(self.auth_data)
        headers = {'Content-Type': 'application/json'}
        url = self.config.get('urls', 'LICENSES_URL')
        kwargs = dict(headers=headers, data=data)
        r = requests.get(url, **kwargs)
        licenses = r.json()

        License = collections.namedtuple('License', licenses[0].keys())
        for license in licenses:
            yield License(*license.values())

    def put_media(self, title, excerpt, content, creator, url, license, lang):
        """ Add a media to the database.

        The 'title', 'excerpt', 'content', 'creator' (refers to the original
        author) and 'url' arguments are expected to be strings. 'license' must
        be an object of the class License (see MetaMedia.get_license() method)
        or, at the very least, have an attribute named 'id' which stores the ID
        of the license in the database. Finally, 'lang' must be a string with
        the two-letter code, in upper-case ('EN', 'DE', 'ES') of the language
        of the media.

        """

        request_data = {'type' : 1, 'title' : title, 'excerpt' : excerpt,
                        'content' : content, 'original-creator' : creator,
                        'original-url' : url, 'license-id' : license.id,
                        'language' : lang}

        request_data.update(self.auth_data)
        data = 'json=' + json.dumps(request_data)
        headers = {'Content-Type': 'application/json'}
        url = self.config.get('urls', 'PUT_MEDIA_URL')
        kwargs = dict(headers=headers, data=data)
        requests.put(url, **kwargs)

    def add_user(self, username, password, email, language):
        """ Add a user to the database.

        The password must be given in plain text (not encrypted), while
        'language' must be a string with the upper-case two-letter code
        ('EN', 'DE', 'ES') of the users' preferred language.

        """

        request_data = {'name' : username, 'password' : password,
                        'email' : email, 'language' : language}

        data = 'json=' + json.dumps(request_data)
        headers = {'Content-Type': 'application/json'}
        url = self.config.get('urls', 'PUT_USER_URL')
        kwargs = dict(headers=headers, data=data)
        requests.put(url, **kwargs)


if __name__ == "__main__":

    metamedia = MetaMedia('anonymous', 'qwerty')

    print "Axes:"
    for axis in metamedia.get_axes():
        print axis.name, axis.left_term, axis.right_term

    print
    print "Licenses:"
    for license in metamedia.get_licenses():
        print license.name, license.url

