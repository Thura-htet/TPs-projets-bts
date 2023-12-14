#include <iostream>
#include "job.h"
#include "spool.h"

using std::string;


int main() {
    Job J1(0, "", false);
    Job J2(112, "text.txt", true);
    Job J3(113, "cool.foo", false);
    Job J4(114, "hello.world", true);
    Job J5(115, "text.pad", false);
    Job J6(116, "Dart.pad", true);

    Spool S;
    S.addJobInSpool(J1);
    S.addJobInSpool(J2);
    S.addJobInSpool(J3);
    S.addJobInSpool(J4);
    S.addJobInSpool(J5);
    S.addJobInSpool(J6);

    S.getDataOnSpool(0);
    return 0;
    // liste des jobs qui sont intégrés dans le spool
}


/*
 * public boolean doitChangerMdP()
 * {
 *      LocalDate DateLimite = LocalDate now();
 *      DateLimite = DateLimite.minusMonths(3);
 *      return (this.actuelMotDePasse.getDateCreation().isAfter(DateLimite);
 * }
 */