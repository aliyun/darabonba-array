# -*- coding: utf-8 -*-
import unittest
import time
import os

from alibabacloud_darabonba_array.client import Client

base_path = os.path.dirname(__file__)


class TestClient(unittest.TestCase):

    def test_assert_as_array(self):
        array = None
        Client.append(array, 'test')
        self.assertEqual(None, array)
        array = ['str', 'int', 'bool']
        Client.append(array, 'test')
        self.assertEqual(['str', 'int', 'bool', 'test'], array)
        Client.append(array, 1)
        self.assertEqual(['str', 'int', 'bool', 'test', 1], array)
        Client.append(array, True)
        self.assertEqual(['str', 'int', 'bool', 'test', 1, True], array)
