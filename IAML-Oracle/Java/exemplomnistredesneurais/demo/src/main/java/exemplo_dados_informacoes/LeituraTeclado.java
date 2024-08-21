package exemplo_dados_informacoes;
import java.util.Scanner;

public class LeituraTeclado {
public void teste(){
    Scanner sc = new Scanner(System.in);

    //leitura do nome
    System.out.println("Digite seu nome:");
    String nome = sc.nextLine();

    // leitura da idade
    System.out.println("Digite sua idade:");
    int idade = sc.nextInt();

    sc.close();
System.out.println("olá, "+nome+" sua idade é: "+idade);
}
    
}