import requests
url = "https://gpd-res-2024s.anshumanpm.eu.org/login#"

try:
    r = requests.get(url)
    r.raise_for_status()  # Raise an exception for HTTP errors
    with open("file.txt", "w", encoding="utf-8") as f:
        f.write(r.text)
except requests.exceptions.RequestException as e:
    print(f"Request failed: {e}")
except Exception as e:
    print(f"An error occurred while writing the file: {e}")