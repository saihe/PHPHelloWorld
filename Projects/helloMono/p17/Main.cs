using System;

namespace p17
{
	class MainClass
	{
		public static void Main (string[] args)
		{

			//条件式稼働テスト
			/*
			string[] value = new string[4]{"A判定" , "B判定" , "C判定" , "D判定"};
			for(var i = 110 ; i >= 50 ; i -= 7){
				Console.WriteLine("点数を判定します");
				string msg = value[3];
				if (i >= 80) {
					msg = value [0];
				} else if (i >= 70) {
					msg = value [1];
				} else if (i >= 60) {
					msg = value [2];
				} else if(i < 0){
					msg = "マイナスはダメ";
				}
				Console.WriteLine(i + "=" + msg);
			}
			*/





			//実装コード

			while (true) {
				Console.WriteLine ("点数を入力してください");
				var score = Console.ReadLine ();
				if(score == ""){
					Console.WriteLine("空はダメ");
					continue;
				}
				string[] value = new string[4]{"A判定" , "B判定" , "C判定" , "D判定"};
				int intsc = int.Parse (score);
				if(intsc < 0){
					Console.WriteLine("マイナスはダメ");
					continue;
				}
				if (intsc >= 80) {
					Console.WriteLine (value [0]);
				} else if (intsc >= 70) {
					Console.WriteLine (value [1]);
				} else if (intsc >= 60) {
					Console.WriteLine (value [2]);
				} else {
					Console.WriteLine (value [3]);
				}
			}

		}
	}
}
