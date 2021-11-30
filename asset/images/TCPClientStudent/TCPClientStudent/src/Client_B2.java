import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Inet4Address;
import java.net.InetAddress;
import java.net.Socket;
import java.net.UnknownHostException;
import java.util.Scanner;

import model.Answer;
import model.Student;

public class Client_B2 {

	public static void main(String[] args) throws UnknownHostException, IOException, ClassNotFoundException {
		Socket socket = new Socket("14.226.25.185", 11300);
		ObjectOutputStream objOs = new ObjectOutputStream(socket.getOutputStream());
		ObjectInputStream objIs = new ObjectInputStream(socket.getInputStream());
		DataInputStream is = new DataInputStream(socket.getInputStream());
		DataOutputStream os = new DataOutputStream(socket.getOutputStream());
		
		String res = is.readUTF();
		System.out.println(res);
		
		
		Scanner in = new Scanner(System.in);

		Student stu = new Student("B18DCCN386", "Nguyễn Xuân Lựu", InetAddress.getLocalHost().getHostAddress(), 12);
//
		objOs.writeObject(stu);
		System.out.println(is.readUTF());
		
		
		os.writeUTF(stu.getMaSV());
		System.out.println(is.readUTF());
		
		
		os.writeUTF(stu.getHovaten());
		System.out.println(is.readUTF());
		
		os.writeInt(stu.getGroup());
		System.out.println(is.readInt());
		
//
		Answer answer = (Answer) objIs.readObject();
		
		os.writeUTF("Answer");
//		System.out.println(answer.getStudent().getHovaten());

		objOs.close();
		objIs.close();
		is.close();
		os.close();
		socket.close();

	}
}
