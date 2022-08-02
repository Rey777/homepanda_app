L' applicazione è pubblicata all'indirizzo http://homepanda

È possibile recuperare le transizioni di un cliente in 3 modi:

    - tramite API che ha come endpoint: /api/v1/customer/{id}/transactions 
      dove {id} è l'id del cliente di cui si vogliono le transizioni
    - tramite pagina raggiungibile all'url: http://homepanda/customer/{id}/transactions
      dove {id} è l'id del cliente di cui si vogliono le transizioni
    - tramite console collegandosi al container docker ed eseguendo il seguente comando:
      ```
      /usr/local/bin/php /var/www/html/artisan customer:transaction {id}
      ```
      dove {id} è l'id del cliente di cui si vogliono le transizioni

L'applicazione si basa su DB Postgres, dove saranno presenti le seguenti tabelle:
    - customers -> elenco dei clienti
    - customer_transactions -> elenco delle transizioni per ogni cliente
    - currencies -> tabella con le valute e i loro simboli

Ogni transizione avrà l'importo e il codice della valuta che verrà utilizzato per il cambio e per mostrare il corretto simbolo
Per il cambio l'applicazione si appoggia ad un servizio creato con NodeJs che restituirà il cambio con un valore randomico tra 0 e 5