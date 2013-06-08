#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import collections
import json
import requests

class MetaMedia(object):
    """ Python interface to the MetaMedia API """

    AXES_URL = "http://localhost/index.php/api/get-axes"
    LICENSES_URL = "http://localhost/index.php/api/get-licenses"

    def __init__(self, user, password):
        self.auth_data = {'user' : user, 'password' : password}

    def get_axes(self):
        """ A generator that yields the axes as named tuples """

        data = 'json=' + json.dumps(self.auth_data)
        headers = {'Content-Type': 'application/json'}
        kwargs = dict(headers=headers, data=data)
        r = requests.get(self.AXES_URL, **kwargs)
        axes = r.json()

        Axis = collections.namedtuple('Axis', axes[0].keys())
        for axis in axes:
            yield Axis(*axis.values())

    def get_licenses(self):
        """ A generator that yields the licenses as named tuples """

        data = 'json=' + json.dumps(self.auth_data)
        headers = {'Content-Type': 'application/json'}
        kwargs = dict(headers=headers, data=data)
        r = requests.get(self.LICENSES_URL, **kwargs)
        licenses = r.json()

        License = collections.namedtuple('License', licenses[0].keys())
        for license in licenses:
            yield License(*license.values())


if __name__ == "__main__":

    metamedia = MetaMedia('anonymous', 'qwerty')

    print "Axes:"
    for axis in metamedia.get_axes():
        print axis.name, axis.left_term, axis.right_term

    print
    print "Licenses:"
    for license in metamedia.get_licenses():
        print license.name, license.url

