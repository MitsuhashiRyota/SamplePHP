#include <stdio.h>
#include <stdlib.h>
#include <time.h>

double calcPi(int n);

double calcPi(int n){
    int count;
    double x,y;
    srand(time(NULL));
    count = 0;
    for(int i = 0; i < n; ++i) {
        x = (double)rand() / RAND_MAX;
        y = (double)rand() / RAND_MAX;
        if( (x * x + y * y) <= 1 ) {
            count++;
        }
    }
    return (double) count / n * 4;
}