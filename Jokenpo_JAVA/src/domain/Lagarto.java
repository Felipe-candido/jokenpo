package domain;

public class Lagarto extends Algoritmo{
    public void execute(TipoJogada tipo) {
        switch (tipo) {
            case SPOCK -> System.out.println("Ganhou! Lagarto envenena o Spock.");
            case PEDRA -> System.out.println("Perdeu! Pedra esmaga o lagarto.");
            case TESOURA -> System.out.println("Perdeu! Tesoura mata o lagarto.");
            case PAPEL -> System.out.println("Ganhou! Lagarto come o Papel.");
            default -> System.out.println("Empatou");
        }
    }
}
