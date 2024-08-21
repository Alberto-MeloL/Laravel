package exemplo_dados_informacoes;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.List;
import java.util.ArrayList;

public class Atv1 {
    public void exc1() {
        Aluno[] alunos = new Aluno[100]; 
        int numAlunos = 0;

        try (BufferedReader br = new BufferedReader(new FileReader("atv1.txt"))) {
            String linha;
            while ((linha = br.readLine()) != null) {
                String[] dados = linha.split(",");
                String nome = dados[0];
                double[] notas = new double[dados.length - 1];
                for (int i = 1; i < dados.length; i++) {
                    notas[i - 1] = Double.parseDouble(dados[i]);
                }
                alunos[numAlunos++] = new Aluno(nome, notas);
            }
        } catch (IOException e) {
            e.printStackTrace();
            return;
        }

        if (numAlunos == 0) {
            System.out.println("O arquivo está vazio ou não contém dados válidos.");
            return;
        }

        double maiorNota = Double.NEGATIVE_INFINITY;
        double menorNota = Double.POSITIVE_INFINITY;
        Aluno alunoMaiorNota = null;
        Aluno alunoMenorNota = null;
        double totalNotas = 0;
        int totalNotasCount = 0;

        for (int i = 0; i < numAlunos; i++) {
            Aluno aluno = alunos[i];
            double media = aluno.calcularMedia();
            if (media > maiorNota) {
                maiorNota = media;
                alunoMaiorNota = aluno;
            }
            if (media < menorNota) {
                menorNota = media;
                alunoMenorNota = aluno;
            }
            totalNotas += aluno.somarNotas();
            totalNotasCount += aluno.getNotas().length;
        }

        double mediaGeral = totalNotas / totalNotasCount;

        System.out.printf("Nome do aluno com a maior nota: %s (Nota: %.2f)%n", alunoMaiorNota.getNome(), maiorNota);
        System.out.printf("Nome do aluno com a menor nota: %s (Nota: %.2f)%n", alunoMenorNota.getNome(), menorNota);
        System.out.printf("Média geral da turma: %.2f%n", mediaGeral);
    }

    private static class Aluno {
        private String nome;
        private double[] notas;

        public Aluno(String nome, double[] notas) {
            this.nome = nome;
            this.notas = notas;
        }

        public String getNome() {
            return nome;
        }

        public double[] getNotas() {
            return notas;
        }

        public double calcularMedia() {
            return somarNotas() / notas.length;
        }

        public double somarNotas() {
            double soma = 0;
            for (double nota : notas) {
                soma += nota;
            }
            return soma;
        }
    }
}
