Feature: Admovil Voucher
    In Order to stamp a Admovil Voucher
    As a User
    I need to be able stamp a Admovil Voucher

  Background:
      Given I am Connect with:
          | user    | password | rfc          | businessId  | systemId    |
          | Pruebas | 10101010 | AAA010101AAA | admovil-php | admovil-php |

  Scenario: Get a Voucher
      Given I am set the Voucher as:
          | billingType | voucherType | branchoffice | notes | currency | exchangeRate | cfdiUse | confirmation |
          | FA          | I           |              | Notes | USD      | 19           | 99      |              |
      And I am set the Payment as:
          | account         | condition | form | method |
          | 999888777666555 | Condition | 03   | PDD    |
      And I am set the Businessname as:
          | id | name    | rfc           | taxId | reference | email           |
          | 12 | Netflix | NETRFC0011223 | 100   | Reference | email@email.com |
      And I am set the Address as:
          | street | codePostal | country | state        | city   | town          | neighborhood | exteriorNumber  | interiorNumber | telephone  | fiscalResidency  |
          | Street | 77500      | MEX     | Quintana Roo | Cancun | Benito Juarez | Mercado 28   | Exterior Number | InteriorNumber | 9999999999 | Fiscal Residency |
      When I get a Voucher
