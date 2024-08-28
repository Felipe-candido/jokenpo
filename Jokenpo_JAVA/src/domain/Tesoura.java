package domain;

public class Tesoura extends Algoritmo{
    public void execute(TipoJogada tipo) {
        switch (tipo) {
            case SPOCK -> System.out.println("Perdeu! Spock quebra a tesoura.");
            case PEDRA -> System.out.println("Perdeu! Pedra quebra a tesoura.");
            case PAPEL -> System.out.println("Ganhou! Tesoura corta o Papel.");
            case LAGARTO -> System.out.println("Ganhou! Tesoura mata o lagarto.");
            default -> System.out.println("Empatou");
        }
    }
}
