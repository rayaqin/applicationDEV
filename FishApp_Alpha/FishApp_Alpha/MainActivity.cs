using Android.App;
using Android.Widget;
using Android.OS;
using Android.Content;
using System.Threading;


namespace FishApp_Alpha
{
    [Activity(Label = "FishApp_Alpha", MainLauncher = true, Icon = "@drawable/icon")]
    public class MainActivity : Activity
    {



        protected override void OnCreate(Bundle bundle)
        {
            base.OnCreate(bundle);
            SetContentView(Resource.Layout.Categories);

        }
    }
}









