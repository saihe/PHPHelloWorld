using System;

namespace p20
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			string m = "";
			for(var i = 0 ; i < 11 ; i++){
				Console.WriteLine (string.Format("{0 , 3}" , i) + "：かねだ" + m);
				m += "あ";
			}
		}
	}
}
