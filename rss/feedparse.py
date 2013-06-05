#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import feedparser
import sys

if __name__ == "__main__":

    url = sys.argv[1]
    feed = feedparser.parse(url)

    for entry in feed.entries:
        print entry.title
        print entry.link
        print entry.description
        print entry.updated
        print

