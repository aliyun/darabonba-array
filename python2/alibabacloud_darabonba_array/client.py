# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from contextlib import nullcontext
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
        return raw.count(str) > 0

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
        return len(raw)

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
        return sep.join(raw)

    @staticmethod
    def concat(
        raw: List[str],
        sep: List[str],
    ) -> List[str]:
        return raw.extend(sep)

    @staticmethod
    def asc_sort(
        raw: List[str]
    ) -> List[str]:
        return raw.sort()

    @staticmethod
    def desc_sort(
        raw: List[str]
    ) -> List[str]:
        return raw.sort(reverse=True)
