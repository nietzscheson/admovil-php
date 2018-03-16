Feature: Admovil Voucher
    In Order to stamp a Admovil Voucher
    As a User
    I need to be able stamp a Admovil Voucher

  Background:
      Given I am Connect with Admovil Service

  Scenario: Get a Voucher
      Given I am set the Voucher as:
          | billing_type | voucher_type | branch_office | notes | currency | exchange_rate | cfdi_use | confirmation |
          | FA           | I            |               | Notes | MXN      | 1             | P01      |              |
      And I am set the Payment as:
          | account         | condition | form | method |
          | 999888777666555 | Condition | 99   | PPD    |
      And I am set the Businessname as:
          | id | name    | rfc           | tax_id |  email          |
          | 12 | Netflix | XEXX010101000 | 100    | email@email.com |
      And I am set the Address as:
          | street | code_postal | state         | city   | town          | neighborhood | exterior_number | interior_number | telephone  | fiscal_residency  |
          | Street | 77500       |  Quintana Roo | Cancun | Benito Juarez | Mercado 28   | Exterior Number | InteriorNumber  | 9999999999 | USA               |
      When I get a Voucher
      And I set the Invoice Details as:
          | product_or_service_key | certificate_number | quantity | description | identification_number | unit_name | unit_key | unit_value | discount | vat_transfer | vat_withheld | ieps_transfer | ieps_withheld | isr | pediment_number | predial_account | notes |
          | 01010101               |                    | 1        | Description | 1                     | Tambor    | 18       | 86.2068966 | 0.0      | 16           | 0            | 0             | 0             | 0   |                 |                 | Notes |
      Then I want to Bill