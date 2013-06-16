#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import feedparser
import getpass
import metamedia
import readline
import sys

from BeautifulSoup import BeautifulStoneSoup

def strip_html(html):
    """ Strips out all tags from HTML, returning only text.
     Inspired by https://gist.github.com/cobralibre/120191 """

    kwargs = dict(convertEntities=BeautifulStoneSoup.ALL_ENTITIES)
    soup = BeautifulStoneSoup(html, **kwargs)
    text = ''.join(soup.findAll(text=True))
    return text

def query_yes_no(question, default = True):
    """ Ask a question and force a yes (True) or no (False) response.

    Use raw_input() to prompt a question and return True or False depending on
    the user's response (yes and no, respectively). If 'default' is given, it
    is returned if the user does not type anything. This is a modified version
    of a function with the same name in the Raspbmc installation script [1],
    which is in turn adapted from an ActiveState recipe [2].

    [1] http://svn.stmlabs.com/svn/raspbmc/release/installers/python/install.py
    [2] http://code.activestate.com/recipes/577058-query-yesno/

    """

    valid = {'yes': True, 'y': True, 'ye': True, 'no': False, 'n': False}

    if default == None:
        prompt = " [y/n]"
    elif default:
        prompt = " [Y/n]"
    else:
        prompt = " [y/N]"

    while True:
        print question + prompt,
        choice = raw_input().lower()
        if default is not None and choice == '':
            return default
        elif choice in valid.keys():
            return valid[choice]
        else:
            print "Please respond with 'yes' or 'no' (or 'y' or 'n')"
            print

def query_axis_position(axis_name, left_term, right_term):
    """ Force the user to assign an axis a value in the range [-10, 10].

    Show the user the name of an ideological axis (for example, 'Economics')
    and the left and right extremes ('Laissez-faire' and 'Interventionism',
    respectively) and force a numeric response in the range [-10, 10]. The
    user's answer is converted to the [0, 20] range before being returned.

    """

    # Example: "Economics (Laissez-Faire / Interventionism): "
    msg = "%s (%s / %s): " % (axis_name, left_term, right_term)

    while True:
        try:
            position = int(raw_input(msg))
            if not -10 <= position <= 10:
                raise ValueError
            else:
                # [-10, 10] to [0, 20]
                return position + 10

        except ValueError:
            print "Position along axes must be in range [-10, 10]"
            print

def rlinput(prompt, default = ''):
    """ Like raw_input(), but the default can be edited.

    The standard library functions input() and raw_input() do not have this
    functionality, so we use the readline module to define an input function
    that uses a prefill value and advanced line editing. The credit for this
    function goes to user 'sth' on Stack Overflow:
    http://stackoverflow.com/a/2533142/184363

    """

    readline.set_startup_hook(lambda: readline.insert_text(default))
    try:
        return raw_input(prompt)
    finally:
        readline.set_startup_hook()

if __name__ == "__main__":

    url = sys.argv[1]
    feed = feedparser.parse(url)

    print "MetaMedia RSS Client"
    user = raw_input("User: ")
    password = getpass.getpass()
    print

    db = metamedia.MetaMedia(user, password)

    for entry in feed.entries:
        print entry.title
        print entry.link
        print strip_html(entry.description)
        print entry.updated
        print

