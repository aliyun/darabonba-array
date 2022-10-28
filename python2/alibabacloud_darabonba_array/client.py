# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from typing import List
import sys


class Client:
    """
    This is a array module
    """
    @staticmethod
    def __init__(self):
        pass

    @staticmethod
    def split(raw, index, limit):
        return raw[index: limit]

    @staticmethod
    def contains(raw, str):
        if raw:
            return raw.count(str) > 0
        return False

    @staticmethod
    def index(raw, str):
        return raw.index(str)

    @staticmethod
    def size(raw):
        if raw:
            return len(raw)
        return 0

    @staticmethod
    def get(raw, index):
        return raw[index]

    @staticmethod
    def join(raw, sep):
        if raw and sep:
            return sep.join(raw)

    @staticmethod
    def concat(raw, sep):
        if raw and sep:
            return raw.extend(sep)
        return raw if raw else sep

    @staticmethod
    def asc_sort(raw):
        if raw:
            raw.sort()
        return raw

    @staticmethod
    def desc_sort(raw):
        if raw:
            raw.sort(reverse=True)
        return raw

    @staticmethod
    def append(array, item):
        """
        append any array item
        """
        if isinstance(array, list):
            array.append(item)
