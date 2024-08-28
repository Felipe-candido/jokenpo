package domain;

public class Spock extends Algoritmo {
    public void execute(TipoJogada tipo) {
        switch (tipo) {
            case PAPEL -> System.out.println("Perdeu! Papel refuta o Spock.");
            case PEDRA -> System.out.println("Ganhou! Spock vaporiza a pedra.");
            case TESOURA -> System.out.println("Ganhou! Spock quebra a tesoura.");
            case LAGARTO -> System.out.println("Perdeu! Lagarto envenena o Spock.");
            default -> System.out.println("Empatou");
        }
    }
}
