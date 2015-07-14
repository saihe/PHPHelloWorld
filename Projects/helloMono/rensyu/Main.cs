using System;

namespace rensyu
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			Console.WriteLine ("練習(6)--------------------------------");
			double mile       = 1.609344;
			double toTokyo    = 715.0;
			double toShibuya  = 6.9;
			double toYokohama = 33.8;
			Console.WriteLine ("青森→東京　　　　" + String.Format("{0,4}" , toTokyo.ToString("F1"))    + "km" + "(" + String.Format("{0,3}" , (toTokyo/mile).ToString("F2")) + "マイル)");
			Console.WriteLine ("飯田橋→渋谷　　　" + String.Format("{0,5}" , toShibuya.ToString("F1"))  + "km" + "(" + String.Format("{0,6}" , (toShibuya/mile).ToString("F2")) + "マイル)");
			Console.WriteLine ("飯田橋→横浜　　　" + String.Format("{0,5}" , toYokohama.ToString("F1")) + "km" + "(" + String.Format("{0,6}" , (toYokohama/mile).ToString("F2")) + "マイル)");

			/*
			double[] distans = new double[]{715.0 , 6.9 , 33.8};
			double[] miles = new double[3];
			string[] places = new string[]{"青森→東京　" , "飯田橋→渋谷" , "飯田橋→渋谷"};

			int ii = 0;
			foreach (var item in distans) {
				miles[ii] = item / mile;
				Console.WriteLine(places[ii] + "　"
				                  + String.Format("{0} {1,5}km{2,6}マイル" , item.ToString("F1")) 
				                  + "km(" + miles[ii].ToString("F2") + "マイル)");
				ii++;
			}
*/
			Console.WriteLine ("練習(7)--------------------------------");
			int room101 = 100;
			int room102 = 75;
			int room103 = 150;
			double tsubo = 3.3;
			Console.WriteLine ("101号室　　" + room101 + "平方メートル" + "(" + (room101/tsubo).ToString("F2") + "坪)");
			Console.WriteLine ("102号室　　" + room102 + "平方メートル" + "(" + (room102/tsubo).ToString("F2") + "坪)");
			Console.WriteLine ("103号室　　" + room103 + "平方メートル" + "(" + (room103/tsubo).ToString("F2") + "坪)");
			Console.WriteLine ("練習(8.9)--------------------------------");
			int[] ages = new int[]{18 , 11 , 30 , 15 , 55 , 32 , 10};
			for(int i = 0 ; i < ages.Length ; i++ ){
				if(ages[i] >= 20){
					Console.WriteLine(ages[i] + "成人");
				}else{
				Console.WriteLine(ages[i]);
				}
			}
			foreach(var item in ages){
			}

			Console.WriteLine ("練習(10)--------------------------------");
			for(int j = 0 ; j < ages.Length ; j++){
				if(ages[j] >= 7 && ages[j] <= 12){
					Console.WriteLine(ages[j] + "小学生");
				}else if(ages[j] >= 13 && ages[j] <= 15){
					Console.WriteLine(ages[j] + "中学生");
				}else{
					Console.WriteLine(ages[j]);
				}
			}









		}
	}
}
