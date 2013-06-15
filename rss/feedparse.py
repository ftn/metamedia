#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import feedparser
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

if __name__ == "__main__":

    url = sys.argv[1]
    feed = feedparser.parse(url)

    for entry in feed.entries:
        print entry.title
        print entry.link
        print strip_html(entry.description)
        print entry.updated
        print

