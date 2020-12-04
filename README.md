## Vader Sentiment Analysis (NLP), PHP, French Language
This is a PHP French version of VADER (Valence Aware Dictionary and Sentiment Reasoner). Please visit <[https://github.com/cjhutto/vaderSentiment](https://github.com/cjhutto/vaderSentiment)> to see the original version. VADER is a lexicon and rule-based sentiment analysis tool that is _specifically attuned to sentiments expressed in social media_.

Working good!!

### Example code:

    require_once "vadersentiment.php";
    
    $textToTest = "La jolie Galline est belle, belle, BELLE !";
    
    $sentimenter = new new SentimentIntensityAnalyzer();
    $result = $sentimenter->getSentiment($textToTest);
    
    print_r($result);


### Output of example code

```
['neg'=> 0.0, 'neu'=> 0.254, 'pos'=> 0.746, 'compound'=> 0.8316]

```
### Copyright and license
The original source code is copyright © 2013 C.J. Hutto


My work is based on a merge of:
[abusby/php-vadersentiment ](https://github.com/abusby/php-vadersentiment)
who ported Hutto's library to php. 

Where applicable, the ported source code is copyright © 2016 Andrew Busby. All rights reserved. The ported code is made available under the MIT license.

[thomas7lieues/vader_FR ](https://github.com/thomas7lieues/vader_FR)
who made a python french version oh Hutto's library and made a precious manually translated french lexicon. 

Where applicable, the ported source code is copyright © 2020 Thomas7lieus. All rights reserved. The ported code is made available under the MIT license.

