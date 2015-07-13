using System;

namespace helloMono
{
	class MainClass
	{
		public static void Main (string[] args)
		{
//			Console.WriteLine ("Hello Shiraishi!");
//			Console.WriteLine ("Hello Kashino!");

			string hw = "Hello World!";
			Console.WriteLine (hw);

			string myLastName  = "Saito";
			string myFirstName = "Kyohei";
			Console.WriteLine ("姓：" + myLastName);
			Console.WriteLine ("名：" + myFirstName);

//			int[] myArray;
//			myArray = new int[4];
			int[] myArray = new int[4]{0 , 1 , 2 , 3};
			Console.WriteLine (myArray[1]);
			myArray [2] = 99;
			Console.WriteLine (myArray[2]);

			string[] lastNames  = new string[4]{"Suzuki" , "Tanaka" , "Kimura" , "Shima"};
			string[] firstNames = new string[4]{"Taro" , "Hanako" , "Jiro" , "Tetsuo"};

			int a = 1;
			if (a==1) {
				Console.WriteLine("a==1");
			}else if(a==2){
				Console.WriteLine("a==2");
			}else{
				Console.WriteLine("FALSE");
			}
			int j = 0;
			foreach (var item in lastNames) {
				Console.WriteLine(item + " " + firstNames[j]);
				j++;
			}
			for (int k = 0; k < lastNames.Length; k++) {
				Console.WriteLine(lastNames[k] + " " + firstNames[k]);
			}
		}		
	}
}
