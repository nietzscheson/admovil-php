Feature: Admovil Voucher
    In Order to stamp a Admovil Voucher
    As a User
    I need to be able stamp a Admovil Voucher

  Background:
      Given I am Connect with:
          | user    | password | rfc          | system_id   |
          | Pruebas | 10101010 | AAA010101AAA | admovil-php |

  Scenario: Get a Voucher
      Given I am set the Voucher as:
          | billing_type | voucher_type | branch_office | notes | currency | exchange_rate | cfdi_use | confirmation |
          | FA           | I            |               | Notes | USD      | 19            | P01      |              |
      And I am set the Payment as:
          | account         | condition | form | method |
          | 999888777666555 | Condition | 03   | PPD    |
      And I am set the Businessname as:
          | id | name    | rfc          | tax_id | reference | email           |
          | 12 | Netflix | AAA010101AAA | 100    | Reference | email@email.com |
      And I am set the Address as:
          | street | code_postal | state         | city   | town          | neighborhood | exterior_number  | interior_number | telephone  | fiscal_residency  |
          | Street | 77500       |  Quintana Roo | Cancun | Benito Juarez | Mercado 28   | Exterior Number | InteriorNumber | 9999999999 | MEX |
      When I get a Voucher
#      And I set the Invoice Details as:
#          | product_or_service_key | certificate_number | quantity | description | identification_number | unit_name                                 | unit_key | unit_value | discount | tax_base | vat_transfer | vat_withheld | ieps_transfer | ieps_withheld | isr | pediment_number |account_predial | notes |
#          | 01010101               |                    | 1        | Description | 1                     | Tambor de cincuenta y cinco galones (EUA) | 18       | 100.00     | 0.0      | 13.8     | 16           | 16           | 0             | 0             | 0   |                 |                | Notes |
#      Then I want to Bill