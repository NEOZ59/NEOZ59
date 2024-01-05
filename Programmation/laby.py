import gym
import numpy as np

# Créez un environnement de labyrinthe
env = gym.make('Taxi-v3')

# Initialisez la table Q
Q = np.zeros([env.observation_space.n, env.action_space.n])

# Définissez les hyperparamètres
learning_rate = 0.8
discount_factor = 0.95
num_episodes = 1000

# Entraînement de l'IA
for episode in range(num_episodes):
    state = env.reset()
    done = False
    while not done:
        state_index = state  # Pour l'environnement "Taxi-v3", state est déjà l'indice
        action = np.argmax(Q[state_index, :])
        next_state, reward, done, _ = env.step(action)
        next_state_index = next_state
        Q[state_index, action] = Q[state_index, action] + learning_rate * (reward + discount_factor * np.max(Q[next_state_index, :]) - Q[state_index, action])
        state = next_state

# Test de l'IA
state = env.reset()
done = False
while not done:
    action = np.argmax(Q[state, :])
    next_state, reward, done, _ = env.step(action)
    env.render()
    state = next_state

