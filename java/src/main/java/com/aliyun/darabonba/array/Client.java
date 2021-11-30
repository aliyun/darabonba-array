// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.darabonba.array;

import com.aliyun.tea.*;

import java.util.*;

public class Client {

    public static java.util.List<String> split(List<String> raw, Integer index, Integer limit) {
        if (null == raw || index < 0 || limit >= raw.size()) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        return raw.subList(index, index + limit);
    }

    public static Boolean contains(List<String> raw, String str) {
        if (null == raw || str == null) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        return raw.contains(str);
    }

    public static Integer index(List<String> raw, String str) {
        if (null == raw || str == null) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        return raw.indexOf(str);
    }

    public static Integer size(List<String> raw) {
        if (null == raw) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        return raw.size();
    }

    public static String get(List<String> raw, Integer index) {
        if (null == raw || index < 0) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        return raw.get(index);
    }

    public static String join(List<String> raw, String sep) {
        if (null == raw || sep == null) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        if (raw.size() > 0) {
            String result = raw.get(0);
            for (int i = 1; i < raw.size(); i++) {
                result = result + sep + raw.get(i);
            }
            return result;
        }
        return raw.toString();
    }

    public static List<String> concat(List<String> raw, List<String> sep) {
        if (null == raw || null == sep) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        List<String> tem = new ArrayList<String>();
        for (String item : raw) {
            tem.add(item);
        }
        tem.addAll(sep);
        return tem;
    }

    public static List<String> ascSort(List<String> raw) {
        if (null == raw) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        String[] sorted = raw.toArray(new String[raw.size()]);
        Arrays.sort(sorted);
        return Arrays.asList(sorted);
    }

    public static List<String> descSort(List<String> raw) {
        if (null == raw) {
            throw new IllegalArgumentException("not a valid value for parameter");
        }
        String[] sorted = raw.toArray(new String[raw.size()]);
        Arrays.sort(sorted, Collections.reverseOrder());
        return Arrays.asList(sorted);
    }
}