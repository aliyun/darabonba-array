using System;
using System.Collections.Generic;
using AlibabaCloud.DarabonbaArray;


using Xunit;

namespace tests
{
    public class ArrayUtilTest
    {
        [Fact]
        public void Test_Append()
        {
            List<string> list1 = null;
            ArrayUtil.Append(list1, "test");
            Assert.Null(list1);
            list1 = new List<string>
            {
                "a",
                "b",
                "c"
            };
            ArrayUtil.Append(list1, "d");
            Assert.Equal("d", list1[3]);
            TestModel model1 = new TestModel
            {
                Str = "a",
                Num = 1
            };
            TestModel model2 = new TestModel
            {
                Str = "b",
                Num = 2
            };
            List<TestModel> list2= new List<TestModel>();
            list2.Add(model1);
            ArrayUtil.Append(list2, model2);
            Assert.Equal(2, list2.Count);
        }
    }

    public class TestModel
    {
        public string Str { get; set; }

        public int? Num { get; set; }

    }

}
