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
    def split(
        raw: List[str],
        index: int,
        limit: int,
    ) -> List[str]:
        return raw[index: limit]

    @staticmethod
    def contains(
        raw: List[str],
        str: str,
    ) -> bool:
        if raw:
            return raw.count(str) > 0
        return False

    @staticmethod
    def index(
        raw: List[str],
        str: str,
    ) -> int:
        return raw.index(str)

    @staticmethod
    def size(
        raw: List[str],
    ) -> int:
        if raw:
            return len(raw)
        return 0

    @staticmethod
    def get(
        raw: List[str],
        index: int,
    ) -> str:
        return raw[index]

    @staticmethod
    def join(
        raw: List[str],
        sep: str,
    ) -> str:
        if raw and sep:
            return sep.join(raw)

    @staticmethod
    def concat(
        raw: List[str],
        sep: List[str],
    ) -> List[str]:
        if raw and sep:
            return raw.extend(sep)
        return raw if raw else sep

    @staticmethod
    def asc_sort(
        raw: List[str]
    ) -> List[str]:
        if raw:
            raw.sort()
        return raw

    @staticmethod
    def desc_sort(
        raw: List[str]
    ) -> List[str]:
        if raw:
            raw.sort(reverse=True)
        return raw
