Feature: Admovil Voucher
    In Order to stamp a Admovil Voucher
    As a User
    I need to be able stamp a Admovil Voucher

  Scenario: Get a Voucher
      Given I am set the Voucher as:
          | billing_type | voucher_type  | notes | currency  | cfdi_use | confirmation |
          | FA           | I             | Notes | MXN       | P01      |              |
      And I am set the Payment as:
          | account         | condition | form | method |
          | 999888777666555 | Condition | 99   | PPD    |
      And I am set the Businessname as:
          | id | name    | rfc           | email          |
          | 12 | Netflix | XEXX010101000 | email@email.com |
      And I am set the Address as:
          | street | state        | city   | town          | neighborhood | exterior_number | interior_number | fiscal_residency  |
          | Street | Quintana Roo | Cancun | Benito Juarez | Mercado 28   | Exterior Number | Interior Number | MEX               |
      When I get a Voucher
      And I set the Invoice Details as:
          | product_or_service_key | certificate_number | description | unit_name | unit_key | unit_value |
          | 01010101               |                    | Description | Tambor    | 18       | 86.2068966     |
      Then I want to Bill