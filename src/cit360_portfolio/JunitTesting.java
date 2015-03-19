/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cit360_portfolio;

/**
 *
 * @author Faron
 */

public class JunitTesting {
    public int square(int x) {
        return x*x;
    }
    public int countA(String text){
        int count = 0;
        for(int i = 0; i <text.length(); i++) {
            if(text.charAt(i)=='a' || text.charAt(i)=='A'){
                count++;
               }
        }
        return count;
    }
}
