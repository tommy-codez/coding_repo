#include <iostream>
#include <cstdlib>
using namespace std;
int main() {
   srand(time(NULL));
   int random_num = rand();
   if (random_num % 2 == 0) {
      cout << random_num << " is an even number\n";
   } else {
      cout << random_num << " is an odd number\n";
   }
   return 0;
}
