using System;

namespace p12
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			Console.WriteLine ("年齢を入力してください");
			var age = Console.Read ();
			if (age >= 16 && age <= 69) {
				Console.WriteLine ("献血できます");
			} else {
				Console.WriteLine("献血できません");
			}
		}
	}
}
