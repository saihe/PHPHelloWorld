using System;

namespace p11
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			Console.WriteLine ("練習(11)--------------------------------");
			int i = 0;
			int[] testAges = new int[20];
			while(i < 20){
				testAges[i] = i;
				i++;
			}
			foreach (var item in testAges) {
				if(item >= 7 && item <= 12){
					Console.WriteLine(item + "小学生");
				}else if(item >= 13 && item <= 15){
					Console.WriteLine(item + "中学生");
				}else{
					Console.WriteLine(item);
				}
			}

		}
	}
}
