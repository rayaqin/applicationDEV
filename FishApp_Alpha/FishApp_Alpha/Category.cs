using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;

namespace FishApp_Alpha
{
    class Category
    {
        private int categoryID;
        private string categoryName;
        private string categoryNameTrans;
        public int CategoryID { get => CategoryID; set => CategoryID = value; }
        public string CategoryName { get => categoryName; set => categoryName = value; }
        public string CategoryNameTrans { get => categoryNameTrans; set => categoryNameTrans = value; }
    }
}