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

if __name__ == "__main__":

    url = sys.argv[1]
    feed = feedparser.parse(url)

    for entry in feed.entries:
        print entry.title
        print entry.link
        print strip_html(entry.description)
        print entry.updated
        print

