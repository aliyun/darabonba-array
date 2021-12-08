/**
 * This is a array module
 */
// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;


namespace AlibabaCloud.DarabonbaArray
{
    public class ArrayUtil 
    {

        public static List<string> Split(List<string> raw, int? index, int? limit)
        {
            return raw.GetRange(index.Value, limit.Value - limit.Value);
        }

        public static bool Contains(List<string> raw, string str)
        {
            return raw.Contains(str);
        }

        public static int Index(List<string> raw, string str)
        {
            return raw.IndexOf(str);
        }

        public static int Size(List<string> raw)
        {
            return raw.Count;
        }

        public static string Get(List<string> raw, int? index)
        {
            return raw[index.Value];
        }

        public static string Join(List<string> raw, string sep)
        {
            return string.Join(sep, raw);
        }

        public static List<string> Concat(List<string> raw, List<string> sep)
        {
            raw.AddRange(sep);
            return raw;
        }

        public static List<string> AscSort(List<string> raw)
        {
            raw.Sort();
            return raw;
        }

        public static List<string> DescSort(List<string> raw)
        {
            raw.Sort();
            raw.Reverse();
            return raw;
        }

    }
}