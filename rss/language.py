#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import pycountry
import unittest

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


class TestLanguageFunctions(unittest.TestCase):

    def test_get_iso639(self):

        def test_english(name):
            """ Assert that 'EN' if returned for 'name' """
            self.assertEqual('EN', get_iso639(name))

        test_english('en')
        test_english('eng')
        test_english('english')
        test_english('english ')
        test_english(' english')
        test_english('English')
        test_english('eNGLiSH')

        def test_german(name):
            """ Assert that 'DE' is returned for 'name' """
            self.assertEqual('DE', get_iso639(name))

        test_german('de')
        test_german('ger')
        test_german('german')
        test_german('german ')
        test_german(' german ')
        test_german('German')
        test_german('gErmAn')

        self.assertRaises(KeyError, get_iso639, 'Nadsat')
        self.assertRaises(KeyError, get_iso639, 'Verdurian')
        self.assertRaises(KeyError, get_iso639, 'Dothraki')


if __name__ == "__main__":
    unittest.main()

