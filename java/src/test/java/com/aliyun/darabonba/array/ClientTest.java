package com.aliyun.darabonba.array;

import org.junit.Assert;
import org.junit.Test;

import java.util.ArrayList;
import java.util.List;

public class ClientTest {
    static class Model {
        public String str;
        public Integer num;
    }
    @Test
    public void appendTest() {
        List<String> list1 = null;
        Client.append(list1, "test");
        Assert.assertNull(list1);
        list1 = new ArrayList<String>();
        list1.add("str1");
        Client.append(list1, "str2");
        Assert.assertEquals(2, list1.size());
        Model model1 = new Model();
        model1.str = "str1";
        model1.num = 1;
        Model model2 = new Model();
        model2.str = "str2";
        model2.num = 1;
        List<Object> list2 = new ArrayList<Object>();
        list2.add(model1);
        Client.append(list2, model2);
        Assert.assertEquals(2, list2.size());
    }
}
