import json
data = {'fruit':['oranges', 'apples', 'peaches'], 'age':12}
with open('data.json', 'w') as outfile:
    json.dump(data, outfile)