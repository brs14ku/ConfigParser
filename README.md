Dumps out the following: 

```object(ConfigParser)[1]
  public 'host' => string 'test.com' (length=8)
  public 'server_id' => int 55331
  public 'server_load_alarm' => float 2.5
  public 'user' => string 'user' (length=4)
  public 'verbose' => boolean true
  public 'test_mode' => boolean true
  public 'debug_mode' => boolean false
  public 'log_file_path' => string '/tmp/logfile.log' (length=16)
  public 'send_notifications' => boolean true
  ```
  Download and run index.php. Include your own config file if you'd like. Just replace it as the parameter in the ConfigParser instantiation in index.php.
