#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import pycountry

def get_iso639(name):
    """ Return the two-letter code of a language.

    This functions accepts the name of a language and returns its ISO 639-1,
    upper-case two-letter code (such as 'EN', 'DE' or 'ES', for English, German
    and Spanish, respectively). For user's convenience, two- (e.g., 'en' ) and
    three-letter (bibliographic) codes ('eng') are also accepted. This allows
    us to also validate an ISO 639-1 code typed by the user. Raises KeyError if
    the language is not recognized.

    """

    name = name.strip()
    if len(name) == 2:
        kwargs = dict(alpha2 = name)
    elif len(name) == 3:
        kwargs = dict(bibliographic = name)
    else:
        kwargs = dict(name = name.capitalize())

    language = pycountry.languages.get(**kwargs)
    return language.alpha2.upper()

if __name__ == "__main__":

    # These three return 'EN'
    print get_iso639("en")
    print get_iso639("eng")
    print get_iso639("english")

