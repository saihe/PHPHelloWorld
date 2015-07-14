using System;

namespace p15
{
	class MainClass
	{
		public static void Main(string[] args)
		{

			//条件式稼働テスト
			/*
			for(var i = -4; i <= 8; i += 4){
				Console.WriteLine ("在庫の確認テスト");
				string msg = "在庫があります";
				if(i <= 0){
					msg = "在庫がありません";
					Console.WriteLine ("在庫=" + i + "：" + msg);
				} else if (i <= 3) {
					msg = "在庫がわずかです";
					Console.WriteLine ("在庫=" + i + "：" + msg);
				}else{
					Console.WriteLine ("在庫=" + i + "：" + msg);
				}
			}
			*/





			//実装コード

			while(true){
			Console.WriteLine("在庫を入力してください");
			string q = Console.ReadLine ();
				if(q == ""){
					continue;
				}
				var quant = int.Parse(q);
				if(quant < 0){
					continue;
				}
				if (quant == 0) {
					Console.WriteLine ("在庫がありません");
				} else if (quant <= 3) {
					Console.WriteLine ("在庫がわずかです");
				} else {
					Console.WriteLine ("在庫があります");
				}
			}

		}
	}
}
