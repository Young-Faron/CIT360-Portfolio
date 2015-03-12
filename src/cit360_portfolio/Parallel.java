
        
package cit360_portfolio;

import java.util.*;


//Runnable interface contains run() method
public class parallel implements Runnable{  //to use threads
    String name;  //thread name
    int time;  // thread time
    Random r = new Random();  //built in Random to generate a random time
    
    public parallel(String x) {
        name = x;
        time = r.nextInt(999);  //random 0-999 milliseconds
     
    }
    
    public void run(){  //run method
        try {
            System.out.printf("%s is sleeping for %d ms\n", name, time);
            Thread.sleep(time);
            System.out.printf("%s is done\n", name);
            
        }catch (Exception e){}
    }
}
