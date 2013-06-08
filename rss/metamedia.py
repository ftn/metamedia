#! /usr/bin/env python

# Author: Victor Terron (c) 2013
# License: GNU GPLv3

import json
import requests

class MetaMedia(object):
    """ Python interface to the MetaMedia API """

    AXES_URL = "http://localhost/index.php/api/get-axes"

    def __init__(self, user, password):
        self.auth_data = {'user' : user, 'password' : password}

    def get_axes(self):
        """ Return the axes as a list of dictionaries """

        data = 'json=' + json.dumps(self.auth_data)
        headers = {'Content-Type': 'application/json'}
        kwargs = dict(headers=headers, data=data)
        r = requests.get(self.AXES_URL, **kwargs)
        return r.json()

if __name__ == "__main__":

    metamedia = MetaMedia('anonymous', 'qwerty')
    for axis in metamedia.get_axes():
        print axis['name'], axis['left_term'], axis['right_term']

