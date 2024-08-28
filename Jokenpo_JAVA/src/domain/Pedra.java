package domain;

public class Pedra extends Algoritmo{
    public void execute(TipoJogada tipo) {
        switch (tipo) {
            case SPOCK -> System.out.println("Perdeu! Spock vaporiza a pedra.");
            case PAPEL -> System.out.println("Perdeu! Papel embrulha a Pedra.");
            case TESOURA -> System.out.println("Ganhou! Pedra quebra a tesoura.");
            case LAGARTO -> System.out.println("Ganhou! Pedra esmaga o lagarto.");
            default -> System.out.println("Empatou");
        }
    }
}
