package jp.co.ka;

public class Test {
	public static void main(String[] args){
		Person taro = new Person();
		taro.name="山田太郎" ;
		taro.age= 20;
		taro.phoneNumber="000-XXX-XXX";
        taro.address="abcde@xxxx.xx.jp";

		Person kimura = new Person();
		kimura.name="木村次郎";
		kimura.age=18;
		kimura.phoneNumber="001-YYY-YYY";
		kimura.address="efg@yyyy.yy.jp";

		Person suzuki = new Person();
		suzuki.name="鈴木花子";
		suzuki.age=16;
		suzuki.phoneNumber="002-ttt-***";
		suzuki.address="hij@uuuu.dd.jp";


		Person kaneko = new Person();
		kaneko.name="金子知禎";
		kaneko.age=26;
		kaneko.phoneNumber="090-5824-2475";
		kaneko.address="ksa.balder@docomo.ne.jp";

	    Robot aibo = new Robot();
	    aibo.name="aibo";

	    Robot asimo = new Robot();
	    asimo.name="asimo";

	    Robot pepper = new Robot();
	    pepper.name="pepper";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();
		System.out.println(kimura.name);
		System.out.println(kimura.age);
		System.out.println(kimura.phoneNumber);
		System.out.println(kimura.address);
		System.out.println(suzuki.name);
		System.out.println(suzuki.age);
		System.out.println(suzuki.phoneNumber);
		System.out.println(suzuki.address);
		System.out.println(kaneko.name);
		System.out.println(kaneko.age);
		System.out.println(kaneko.phoneNumber);
		System.out.println(kaneko.address);
	    aibo.talk();
	    aibo.walk();
	    aibo.run();
	    asimo.talk();
	    asimo.walk();
	    asimo.run();
	    pepper.talk();
	    pepper.walk();
	    pepper.run();


	}

}
