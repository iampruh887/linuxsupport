import pathlib
import textwrap
import google.generativeai as genai
from IPython.display import display
from IPython.display import Markdown

def to_markdown(text):
    text = text.replace('.', ' *')
    return Markdown(textwrap.indent(text, '>', predicate = lambda _:True))
GOOGLE_API_KEY = 'AIzaSyBp8RncYhV0nRDQAYIWoj_rx9ioqmhl35w'
genai.configure(api_key = GOOGLE_API_KEY)
model = genai.GenerativeModel('gemini-pro')
while True:
    string = input("enter query?\n")
    response = model.generate_content(string)
    print(response.text)
