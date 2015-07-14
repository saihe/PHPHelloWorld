using System;

namespace p14
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			//条件式稼働テストコード
			/*
			Console.WriteLine ("二つの数値を比較します");
			for(var i = 1 ; i <= 5 ; i++){
				var v1 = i;
				for(var j = 5 ; j >= 1 ; j--){
					var v2 = j;
					string msg = v1 + "は" + v2 + "より小さい";
					if (v1 == v2) {
						msg = v1 + "と" + v2 + "は等しい";
					} else if (v1 >= v2) {
						msg = v1 + "は" + v2 + "より大きい";
					}
					Console.WriteLine (msg);
				}
			}
			*/

			//実装コード

			while(true){
				Console.WriteLine ("二つの数値を比較します");
				Console.Write ("一つ目の値を入力してください：");
				var s = Console.ReadLine  ();
				if(s == ""){
					continue;
				}
				var v1 = double.Parse(s);

				Console.Write ("二つ目の値を入力してください：");
				s = Console.ReadLine  ();
				if(s == ""){
					continue;
				}
				var v2 = double.Parse(s);

				string msg = v1 + "は" + v2 + "より小さい";
				if (v1 == v2) {
					msg = v1 + "と" + v2 + "は等しい";
				} else if (v1 >= v2) {
					msg = v1 + "は" + v2 + "より大きい";
				}
				Console.WriteLine (msg);
			}

		}
	}
}
