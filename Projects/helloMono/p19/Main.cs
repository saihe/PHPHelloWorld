using System;

namespace p19
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			for(var i = 1 ; i <= 100 ; i++){
				Console.WriteLine (string.Format ("{0 , 3}" , i) + "　おはよう");
			}
		}
	}
}
