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
        row = []    
        count=0
        while(count<limit):
            str=raw.__getitem__(count)    
            row.append(str)
            count+=1
        return row

    @staticmethod
    def contains(
        raw: List[str],
        str: str,
    ) -> bool:
        return raw.__contains__(str)

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
    ) -> str:
        row = raw+sep
        str="".join(row)
        return str