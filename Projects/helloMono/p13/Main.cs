using System;

namespace p13
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			//条件式稼働テストの自動化コード
			/*
			for(var i = 4 ; i <= 8 ; i++){
				for(var j = 118 ; j <= 122 ; j++){
					Console.Write ("年齢=" + i);
					var s = i;
					var age = s;
					
					Console.Write ("身長=" + j);
					s     = j;
					var height = s;
					
					string msg = "-----";
					if (age >= 6 && height >= 120) {
						msg = "乗れます";
					}
					Console.WriteLine ("：" + msg);
					Console.WriteLine("");
				}
			}
			*/

			//以下実装コード

			while(true){
				Console.Write ("年齢を入力してください：");
				var s = Console.ReadLine ();
				if(s == ""){
					continue;
				}
				var age = int.Parse(s);

				Console.Write ("身長を入力してください：");
				s     = Console.ReadLine ();
				if(s == ""){
					continue;
				}
				var height = int.Parse(s);

				string msg = "乗れません";
					if (age >= 6 && height >= 120) {
						msg = "乗れます";
					}
				Console.WriteLine (msg);
			}

		}
	}
}
