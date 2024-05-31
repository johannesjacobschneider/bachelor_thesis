import random
import string
import time
import os
import requests

def load_passwords(file_path):
    if not os.path.exists(file_path):
        print(f"Die Datei '{file_path}' wurde nicht gefunden.")
        return []
    with open(file_path, 'r', encoding='latin-1') as file:
        passwords = [line.strip() for line in file]
    return passwords

def generate_username():
    first_part = random.randint(100, 199)
    remaining_part = ''.join(random.choice(string.digits) for _ in range(6))
    return f"{first_part}{remaining_part}"

def generate_password(passwords):
    if not passwords:
        return "Es wurden keine Passwörter geladen."
    return random.choice(passwords)

def send_data(url, username, password):
    data = {
        'username': username,
        'password': password
    }
    response = requests.post(url, data=data)
    return response.status_code, response.text

def main():
    file_path = 'vr_bank_passwords.txt'
    passwords = load_passwords(file_path)
    url = 'https://johannesjacobschneider.com/form_handler_3.php'

    try:
        while True:
            username = generate_username()
            password = generate_password(passwords)
            status_code, response_text = send_data(url, username, password)
            print(f"Data sent: Username - {username}, Password - {password}")
            print(f"Response: {status_code}, {response_text}")
            # time.sleep(random.randint(60, 60*5))
    except KeyboardInterrupt:
        print("Skript wurde manuell gestoppt.")

if __name__ == "__main__":
    main()
