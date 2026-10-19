import pygame

pygame.init()
pygame.mixer.init()

SCREEN_WIDTH = 800
SCREEN_HEIGHT = 600
screen = pygame.display.set_mode((SCREEN_WIDTH, SCREEN_HEIGHT))
pygame.display.set_caption('Halo - disparo con teclado')
clock = pygame.time.Clock()

try:
    sound_shot = pygame.mixer.Sound('disparo.wav')
except pygame.error:
    sound_shot = None


def lanzar_misil_archer(potencia_destruccion, objetivo, distancia):
    if objetivo <= 0:
        raise ValueError('El objetivo debe ser mayor que 0.')
    impacto_masa = (potencia_destruccion / objetivo) - distancia
    return impacto_masa


def disparar():
    resultado = lanzar_misil_archer(100, 10, 5)
    print(f'¡Disparo ejecutado! Impacto: {resultado}')
    if sound_shot is not None:
        sound_shot.play()


running = True
while running:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False
        elif event.type == pygame.KEYDOWN:
            if event.key == pygame.K_SPACE:
                disparar()

    screen.fill((0, 0, 0))
    pygame.display.flip()
    clock.tick(60)

pygame.quit()